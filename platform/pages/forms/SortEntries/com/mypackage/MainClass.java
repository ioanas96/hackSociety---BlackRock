package com.mypackage;

import java.io.BufferedReader;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.IOException;
import java.io.PrintWriter;
import java.io.UnsupportedEncodingException;
import java.util.ArrayList;

public class MainClass {
	public static void main(String[] args) {
		BufferedReader bufferedReader = null;
		PrintWriter printWriter = null;
		ArrayList<String> lines = new ArrayList<String>();
		try {
			bufferedReader = new BufferedReader(new FileReader(args[1]));
			try {
				printWriter = new PrintWriter("../../../fax/result.txt", "UTF-8");
			} catch (UnsupportedEncodingException e1) {
				// TODO Auto-generated catch block
				e1.printStackTrace();
			}
			String line;
			
			do {
				line = null;
				try {
					line = bufferedReader.readLine();
				} catch (IOException e) {
					// TODO Auto-generated catch block
					e.printStackTrace();
				}
				if (line != null) {
					lines.add(line);
				}
			} while (line != null);
			
			boolean sorted;
			
			do {
				sorted = true;
				
				for (int i = 0; i < lines.size() - 1; i++) {
					String s1 = lines.get(i);
					String s2 = lines.get(i + 1);
					
					Integer s1Int = new Integer(s1.substring(s1.lastIndexOf(' ') + 1));
					Integer s2Int = new Integer(s2.substring(s2.lastIndexOf(' ') + 1));
					
					if (s1Int > s2Int) {
						lines.set(i, s2);
						lines.set(i + 1, s1);

						sorted = false;
					}
				}
			} while (!sorted);
			
			do {
				sorted = true;
				
				for (int i = 0; i < lines.size() - 1; i++) {
					String s1 = lines.get(i);
					String s2 = lines.get(i + 1);
					
					int lastSpaceS1 = s1.lastIndexOf(' ');
					int lastSpaceS2 = s2.lastIndexOf(' ');
					
					String copyS1 = s1.substring(0, lastSpaceS1);
					String copyS2 = s2.substring(0, lastSpaceS2);
					
 					Integer s1Int = new Integer(copyS1.substring(copyS1.lastIndexOf(' ') + 1));
					Integer s2Int = new Integer(copyS2.substring(copyS2.lastIndexOf(' ') + 1));
					
					if (s1Int > s2Int) {
						lines.set(i, s2);
						lines.set(i + 1, s1);
						sorted = false;
					}
				}
			} while (!sorted);
			
			for (int i = 0; i < lines.size(); i++) {

				String newLine = "";
				String[] tokens = lines.get(i).split(" ");
				String[] mandatoryTokens = new String[tokens.length - 2];
				for (int j = 0; j < tokens.length - 2; j++) {
					mandatoryTokens[j] = tokens[j];
					newLine += tokens[j] + " ";
				}
				newLine = newLine.substring(0, newLine.length() - 1);
				lines.set(i, newLine);
			}
			
			for (int i = 0; i < lines.size(); i++) {
				//System.out.println(lines.get(i));
				printWriter.println(lines.get(i));
			}
			printWriter.close();
			
		} catch (FileNotFoundException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		} finally {
			try {
				bufferedReader.close();
			} catch (IOException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
		}
	}
}
