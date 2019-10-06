Get-ChildItem -Recurse -File -Filter personbildlinks.txt | Rename-Item -NewName person2.txt -WhatIf
Get-ChildItem -Recurse -File -Filter person2.txt | Rename-Item -NewName personbildlinks.txt