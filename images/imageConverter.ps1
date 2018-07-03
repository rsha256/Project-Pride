#
# @author Rahul Shah
#
# to convert images to png
s# 

$filename = Read-Host 'What is the filename?'
$extension = Read-Host 'What is the extension?'

Write-host "magick `"C:/Users/Rahul/Project-Pride/images/$filename.$extension`" `"C:/Users/Rahul/Project-Pride/images/$filename.png`""
