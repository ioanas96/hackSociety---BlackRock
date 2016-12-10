import requests, sys, getopt, codecs, matlab.engine

def uprint (*objects, sep=' ', end='\n', file=sys.stdout):
    enc = file.encoding
    if enc == 'UTF-8':
        print(*objects, sep=sep, end=end, file=file)
    else:
        f = lambda obj: str(obj).encode(enc, errors='backslashreplace').decode(enc)
        print(*map(f, objects), sep=sep, end=end, file=file)

def ocr_space_file(filename, overlay=True, api_key='8609cb609f88957', language='eng'):
    """ OCR.space API request with local file.
        Python3.5 - not tested on 2.7
    :param filename: Your file path & name.
    :param overlay: Is OCR.space overlay required in your response.
                    Defaults to False.
    :param api_key: OCR.space API key.
                    Defaults to 'helloworld'.
    :param language: Language code to be used in OCR.
                    List of available language codes can be found on https://ocr.space/OCRAPI
                    Defaults to 'en'.
    :return: Result in JSON format.
    """

    payload = {'isOverlayRequired': overlay,
               'apikey': api_key,
               'language': language,
               }
    with open(filename, 'rb') as f:
        r = requests.post('https://api.ocr.space/parse/image',
                          files={filename: f},
                          data=payload,
                          )
    return r.content.decode()


def ocr_space_url(url, overlay=False, api_key='8609cb609f88957', language='eng'):
    """ OCR.space API request with remote file.
        Python3.5 - not tested on 2.7
    :param url: Image url.
    :param overlay: Is OCR.space overlay required in your response.
                    Defaults to False.
    :param api_key: OCR.space API key.
                    Defaults to 'helloworld'.
    :param language: Language code to be used in OCR.
                    List of available language codes can be found on https://ocr.space/OCRAPI
                    Defaults to 'en'.
    :return: Result in JSON format.
    """

    payload = {'url': url,
               'isOverlayRequired': overlay,
               'apikey': api_key,
               'language': language,
               }
    r = requests.post('https://api.ocr.space/parse/image',
                      data=payload,
                      )
    return r.content.decode()

def main(argv):
   sys.stdout = codecs.getwriter('cp850')(sys.stdout.buffer,'strict')
   sys.stderr = codecs.getwriter('cp850')(sys.stderr.buffer, 'strict')

   inputfile = argv[0]
   outputfile = argv[1]

   sgnclient = argv[2]
   sgnadvisor = argv[3]

   try:
      opts, args = getopt.getopt(argv,"hi:o:",["ifile=","ofile="])
   except getopt.GetoptError:
      print ('test.py -i <inputfile> -o <outputfile>')
      sys.exit(2)
   for opt, arg in opts:
      if opt == '-h':
         print ('test.py -i <inputfile> -o <outputfile>')
         sys.exit()
      elif opt in ("-i", "--ifile"):
         inputfile = arg
      elif opt in ("-o", "--ofile"):
         outputfile = arg
   print ('Input file is ', inputfile)
   print ('Output file is ', outputfile)

   f = open(argv[1],'w')

   eng = matlab.engine.start_matlab()
   vsgn1 = eng.getSignature(sgnclient,inputfile,nargout=1)
   vsgn2 = eng.getSignature(sgnadvisor,inputfile,nargout=1)
   
   if vsgn1 == 1.0 and vsgn2 == 1.0:
      test_file = ocr_space_file(inputfile, language='eng')

      # Parse
      str_aux_text_file = test_file.split('"Lines":', 10)[1]
      aux_text_file = str_aux_text_file.split('HasOverlay', 2)[0]
      aux_text_file = aux_text_file[1:-3]
      sections = aux_text_file.split('Words', 30)
      l = len(sections)

      i = 1
      while (i < l):
         str_for = sections[i]
         str_for = str_for[2:-3]
         str_for = str_for.split('WordText', 5)
         str_for = str_for[1:]

         l_str = len(str_for)
         str_for[l_str-1] = str_for[l_str-1].split('MaxHeight', 2)[0]

         j = 0
         words = ''
         while (j < l_str):
       	    str_for[j] = str_for[j].split('Height', 2)[0]

            str_for[j] = str_for[j].split('Top', 2)
            top = str_for[j][1][2:-2]

            str_for[j] = str_for[j][0]
            str_for[j] = str_for[j].split('Left', 2)

            if j == 0:
               left = str_for[j][1][2:-2]

            str_for[j] = str_for[j][0]
            words +=  str_for[j][3:-3]
            words += ' '

       	    j += 1
       
         words = words[0:-1]
         sections[i] = words + ' ' + top + ' ' + left + '\n'
         f.write(sections[i]) # python will convert \n to os.linesep
         i += 1

   else:
      f.write("Permission denied!")

   f.close()


if __name__ == "__main__":
   main(sys.argv[1:])

# Use examples:
# test_file = ocr_space_file(filename='example_image.png', language='pol')
# test_url = ocr_space_url(url='http://i.imgur.com/31d5L5y.jpg')
