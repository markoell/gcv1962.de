$template = 'Title: {Title}

----

Date: {From}

----

Completeday: {completeDay}

----

Location: {Location}

----

Link: {Url}

----

Text: {Text}

----

Categories: {Categories}'

$content = Get-Content -Path .\termine.txt
$title = ""
$date = ""
$time = "00:00"
$place = ""
$public = ""
$link = ""
$target = ""

$content | ForEach-Object {
  if($_ -eq "- " -and $title -ne ""){
    $complete = $(if($time -eq "00:00" -or $title -eq "") { "true" } else { "false" })
    $categories = @()
    if($public -eq "true") { $categories += "public" }
    if($target -eq "Tickets") { $categories += "tickets" }
    $folder = New-Item -ItemType Directory -Path ..\..\termine\_drafts\ -Name ($title.Replace("- ","-").Replace(" ","-").Replace(".",""))
    $file = New-Item -ItemType File -Path $folder.FullName -Name "termin.txt"
    $template.Replace("{Title}",$title).Replace("{From}","$date $time").Replace("{Location}", $place).Replace("{completeDay}",$complete).Replace("{Url}", $link).Replace("{Text}",$target).Replace("{Categories}", [string]::Join(', ', $categories)) | Out-File -Encoding utf8 $file
  }
  if($_ -match "\stitle\:\s'?(.*?)'?$"){
    $title = $Matches[1]
  }
  if($_ -match "\sdate\:\s(.*?)$"){
    $date = $Matches[1]
  }
  if($_ -match "\stime\:\s(.*?)$"){
    $time = $Matches[1]
  }
  if($_ -match "\splace\:\s(.*?)$"){
    $place = $Matches[1]
  }
  if($_ -match "\spublic\:\s'(.*?)'$"){
    $public = $Matches[1]
  }
  if($_ -match "\s+(https\:.*)$"){
    $link = $Matches[1]
  }
  if($_ -match "\stargettext\:\s(.*?)$"){
    $target = $Matches[1]
  }   
}

$folder = New-Item -ItemType Directory -Path ..\..\termine\_drafts\ -Name ($title.Replace("- ","-").Replace(" ","-").Replace(".",""))
$file = New-Item -ItemType File -Path $folder.FullName -Name "termin.txt" 
$template.Replace("{Title}",$title).Replace("{From}","$date $time").Replace("{Location}", $place).Replace("{completeDay}",$complete).Replace("{Url}", $link).Replace("{Text}",$target).Replace("{Categories}", [string]::Join(', ', $categories)) | Out-File -Encoding utf8 $file