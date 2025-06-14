<?php
$file = 'resume/my_resume.pdf';
if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="' . basename($file) . '"');
    readfile($file);
    exit;
} else {
    echo "რეზიუმე ვერ მოიძებნა.";
}
?>