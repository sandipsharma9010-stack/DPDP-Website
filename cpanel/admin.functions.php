<?php

function redirect($url) {
    header('Location: ' . $url);
    exit;
}

function sanitizeInput($input) {
    // retrun htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
    // return htmlspecialchars(trim($input));
    return trim($input);
}

function uploadFile($file, $targetDir = "../uploads/", $newFileName = null, $allowedTypes = ["png", "jpeg", "jpg", "pdf"], $maxSize = 2 * 1024 * 1024) {
    if (!isset($file) || $file['error'] !== UPLOAD_ERR_OK) {
        return ["success" => false, "message" => "File upload error."];
    }

    // Extract file details
    $fileExt = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));
    $fileSize = $file["size"];
    $fileTmp = $file["tmp_name"];

    // Validate file type
    if (!in_array($fileExt, $allowedTypes)) {
        return ["success" => false, "message" => "Invalid file type. Allowed types: " . implode(", ", $allowedTypes)];
    }

    // Validate file size
    if ($fileSize > $maxSize) {
        return ["success" => false, "message" => "File is too large. Max size: " . ($maxSize / 1024 / 1024) . "MB"];
    }

    // Ensure target directory exists
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    // Set the new file name
    if ($newFileName) {
        $safeFileName = preg_replace("/[^a-zA-Z0-9_-]/", "", pathinfo($newFileName, PATHINFO_FILENAME)); // Sanitize filename
        $newFileName = $safeFileName . "." . $fileExt;
    } else {
        $newFileName = uniqid() . "_" . basename($file["name"]);
    }

    $targetFile = $targetDir . $newFileName;

    // Move uploaded file
    if (move_uploaded_file($fileTmp, $targetFile)) {
        return ["success" => true, "message" => "File uploaded successfully.", "file_path" => $targetFile];
    } else {
        return ["success" => false, "message" => "Failed to move uploaded file."];
    }
}






function rencv($name='', $email='', $phone='', $job='', $experience='', $currentctc='', $expectedctc='') {

    $date = date('YmdHis');

    $name = strtolower($name);
    $email = strtolower($email);
    $phone = strtolower($phone);
    $job = strtolower($job);
    $experience = strtolower($experience);
    $currentctc = strtolower($currentctc);
    $expectedctc = strtolower($expectedctc);

    $name = preg_replace('/[^a-zA-Z0-9]/', '', $name);
    $email = preg_replace('/[^a-zA-Z0-9]/', '', $email);
    $phone = preg_replace('/[^a-zA-Z0-9]/', '', $phone);
    $job = preg_replace('/[^a-zA-Z0-9]/', '', $job);
    $experience = preg_replace('/[^a-zA-Z0-9]/', '', $experience);
    $currentctc = preg_replace('/[^a-zA-Z0-9]/', '', $currentctc);
    $expectedctc = preg_replace('/[^a-zA-Z0-9]/', '', $expectedctc);

    return $date.'-'.$name.'-'.$email.'-'.$phone.'-'.$job.'-'.$experience.'-'.$currentctc.'-'.$expectedctc;
}






