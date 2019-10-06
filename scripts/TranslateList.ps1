$nl = [System.Environment]::NewLine
Import-Csv .\list.txt | % { $counter = 1 }{ 
    $path = "$($counter)_$($_.Jahr)"
    New-Item -ItemType Directory -Name "$path"
    New-Item -ItemType File -Name "personbildlinks.txt" -Path "$path" -Value "Title: $($_.Title)$nl----${nl}Year: $($_.Jahr)$nl----"
    $counter++ 

}