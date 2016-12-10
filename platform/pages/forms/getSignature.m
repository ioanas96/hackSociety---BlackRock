function [ res ] = getSignature( sgnName, sceneName )

    sgnImage = imread(sgnName);
    sgnImage = rgb2gray(sgnImage);
    
    sceneImage = imread(sceneName);
    sceneImage = rgb2gray(sceneImage);

    sgnPoints = detectSURFFeatures(sgnImage);
    scenePoints = detectSURFFeatures(sceneImage);
    
    [sgnFeatures, sgnPoints] = extractFeatures(sgnImage, sgnPoints);
    [sceneFeatures, scenePoints] = extractFeatures(sceneImage, scenePoints);
    
    sgnPairs = matchFeatures(sgnFeatures, sceneFeatures);
    
    matchedSgnPoints = sgnPoints(sgnPairs(:, 1), :);
    matchedScenePoints = scenePoints(sgnPairs(:, 2), :);
    
    if matchedSgnPoints.Count == 0 && matchedScenePoints.Count == 0
         res = 0;
    else
        res = 1;
    end
    
end

