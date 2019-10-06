$folder = @(
"home"
"home\1-Bilderbanner"
"home\2-News"
"home\3-anstehende Termine"
"1-Chronik"
"1-Chronik\1-Präsidenten"
"1-Chronik\2-Prinzenpaare"
"1-Chronik\3-Jahresorden"
"2-Unser Verein"
"2-Unser Verein\1-Vorstandschaft"
"2-Unser Verein\2-Komitee"
"2-Unser Verein\3-Symbolfigur"
"2-Unser Verein\4-Elferrat"
"2-Unser Verein\5-Trainer-/innen"
"2-Unser Verein\6-Sitzungspräsidenten"
"3-Unsere Aktiven"
"3-Unsere Aktiven\1-Minigarde"
"3-Unsere Aktiven\2-Jugendgarde"
"3-Unsere Aktiven\3-Juniorengarde"
"3-Unsere Aktiven\4-Prinzengarde"
"3-Unsere Aktiven\5-Rebläuse"
"3-Unsere Aktiven\6-Just Dance"
"3-Unsere Aktiven\7-Glamour Girls"
"3-Unsere Aktiven\8-Männerballett"
"3-Unsere Aktiven\9-siehe Jahresheft"
"4-Unsere Veranstaltungen"
"4-Unsere Veranstaltungen\1-Prunksitzungen"
"4-Unsere Veranstaltungen\2-Kartenvorverkauf"
"5-Auszeichnungen"
"5-Auszeichnungen\1-Ehrensenatoren"
"5-Auszeichnungen\2-Senatoren"
"5-Auszeichnungen\3-BDK Gold und Gold mit Brilliant"
"5-Auszeichnungen\4-LWK (Hirsch)"
"5-Auszeichnungen\5-GCV (Goldener Kater, Schlafmütze)"
"5-Auszeichnungen\6-sonstiges"
"6-Impressum"
"7-Kontakt"
)

$items = @(
@{ ParentNumber=""; ParentName="home"; ParentText="home"; ChildNumber=""; ChildName=""; ChildText="" }
@{ ParentNumber=""; ParentName="home"; ParentText="home"; ChildNumber="1"; ChildName="Bilderbanner"; ChildText="Bilderbanner" }
@{ ParentNumber=""; ParentName="home"; ParentText="home"; ChildNumber="2"; ChildName="News"; ChildText="News" }
@{ ParentNumber=""; ParentName="home"; ParentText="home"; ChildNumber="3"; ChildName="anstehendeTermine"; ChildText="anstehende Termine" }
@{ ParentNumber="1"; ParentName="Chronik"; ParentText="Chronik"; ChildNumber=""; ChildName=""; ChildText="" }
@{ ParentNumber="1"; ParentName="Chronik"; ParentText="Chronik"; ChildNumber="1"; ChildName="Praesidenten"; ChildText="Präsidenten" }
@{ ParentNumber="1"; ParentName="Chronik"; ParentText="Chronik"; ChildNumber="2"; ChildName="Prinzenpaare"; ChildText="Prinzenpaare" }
@{ ParentNumber="1"; ParentName="Chronik"; ParentText="Chronik"; ChildNumber="3"; ChildName="Jahresorden"; ChildText="Jahresorden" }
@{ ParentNumber="2"; ParentName="UnserVerein"; ParentText="Unser Verein"; ChildNumber=""; ChildName=""; ChildText="" }
@{ ParentNumber="2"; ParentName="UnserVerein"; ParentText="Unser Verein"; ChildNumber="1"; ChildName="Vorstandschaft"; ChildText="Vorstandschaft" }
@{ ParentNumber="2"; ParentName="UnserVerein"; ParentText="Unser Verein"; ChildNumber="2"; ChildName="Komitee"; ChildText="Komitee" }
@{ ParentNumber="2"; ParentName="UnserVerein"; ParentText="Unser Verein"; ChildNumber="3"; ChildName="Symbolfigur"; ChildText="Symbolfigur" }
@{ ParentNumber="2"; ParentName="UnserVerein"; ParentText="Unser Verein"; ChildNumber="4"; ChildName="Elferrat"; ChildText="Elferrat" }
@{ ParentNumber="2"; ParentName="UnserVerein"; ParentText="Unser Verein"; ChildNumber="5"; ChildName="Trainer-/innen"; ChildText="Trainer-/innen" }
@{ ParentNumber="2"; ParentName="UnserVerein"; ParentText="Unser Verein"; ChildNumber="6"; ChildName="Sitzungspraesidenten"; ChildText="Sitzungspräsidenten" }
@{ ParentNumber="3"; ParentName="UnsereAktiven"; ParentText="Unsere Aktiven"; ChildNumber=""; ChildName=""; ChildText="" }
@{ ParentNumber="3"; ParentName="UnsereAktiven"; ParentText="Unsere Aktiven"; ChildNumber="1"; ChildName="Minigarde"; ChildText="Minigarde" }
@{ ParentNumber="3"; ParentName="UnsereAktiven"; ParentText="Unsere Aktiven"; ChildNumber="2"; ChildName="Jugendgarde"; ChildText="Jugendgarde" }
@{ ParentNumber="3"; ParentName="UnsereAktiven"; ParentText="Unsere Aktiven"; ChildNumber="3"; ChildName="Juniorengarde"; ChildText="Juniorengarde" }
@{ ParentNumber="3"; ParentName="UnsereAktiven"; ParentText="Unsere Aktiven"; ChildNumber="4"; ChildName="Prinzengarde"; ChildText="Prinzengarde" }
@{ ParentNumber="3"; ParentName="UnsereAktiven"; ParentText="Unsere Aktiven"; ChildNumber="5"; ChildName="Reblaeuse"; ChildText="Rebläuse" }
@{ ParentNumber="3"; ParentName="UnsereAktiven"; ParentText="Unsere Aktiven"; ChildNumber="6"; ChildName="JustDance"; ChildText="Just Dance" }
@{ ParentNumber="3"; ParentName="UnsereAktiven"; ParentText="Unsere Aktiven"; ChildNumber="7"; ChildName="GlamourGirls"; ChildText="Glamour Girls" }
@{ ParentNumber="3"; ParentName="UnsereAktiven"; ParentText="Unsere Aktiven"; ChildNumber="8"; ChildName="Maennerballett"; ChildText="Männerballett" }
@{ ParentNumber="3"; ParentName="UnsereAktiven"; ParentText="Unsere Aktiven"; ChildNumber="9"; ChildName="sieheJahresheft"; ChildText="siehe Jahresheft" }
@{ ParentNumber="4"; ParentName="UnsereVeranstaltungen"; ParentText="Unsere Veranstaltungen"; ChildNumber=""; ChildName=""; ChildText="" }
@{ ParentNumber="4"; ParentName="UnsereVeranstaltungen"; ParentText="Unsere Veranstaltungen"; ChildNumber="1"; ChildName="Prunksitzungen"; ChildText="Prunksitzungen" }
@{ ParentNumber="4"; ParentName="UnsereVeranstaltungen"; ParentText="Unsere Veranstaltungen"; ChildNumber="2"; ChildName="Kartenvorverkauf"; ChildText="Kartenvorverkauf" }
@{ ParentNumber="5"; ParentName="Auszeichnungen"; ParentText="Auszeichnungen"; ChildNumber=""; ChildName=""; ChildText="" }
@{ ParentNumber="5"; ParentName="Auszeichnungen"; ParentText="Auszeichnungen"; ChildNumber="1"; ChildName="Ehrensenatoren"; ChildText="Ehrensenatoren" }
@{ ParentNumber="5"; ParentName="Auszeichnungen"; ParentText="Auszeichnungen"; ChildNumber="2"; ChildName="Senatoren"; ChildText="Senatoren" }
@{ ParentNumber="5"; ParentName="Auszeichnungen"; ParentText="Auszeichnungen"; ChildNumber="3"; ChildName="BDKGoldundGoldmitBrilliant"; ChildText="BDK Gold und Gold mit Brilliant" }
@{ ParentNumber="5"; ParentName="Auszeichnungen"; ParentText="Auszeichnungen"; ChildNumber="4"; ChildName="LWKHirsch"; ChildText="LWK (Hirsch)" }
@{ ParentNumber="5"; ParentName="Auszeichnungen"; ParentText="Auszeichnungen"; ChildNumber="5"; ChildName="GCVGoldenerKater,Schlafmuetze"; ChildText="GCV (Goldener Kater, Schlafmütze)" }
@{ ParentNumber="5"; ParentName="Auszeichnungen"; ParentText="Auszeichnungen"; ChildNumber="6"; ChildName="sonstiges"; ChildText="sonstiges" }
@{ ParentNumber="6"; ParentName="Impressum"; ParentText="Impressum"; ChildNumber=""; ChildName=""; ChildText="" }
@{ ParentNumber="7"; ParentName="Kontakt"; ParentText="Kontakt"; ChildNumber=""; ChildName=""; ChildText="" }
)

$path = Get-Location
$items | % {
    $prefix = if($_.ParentNumber -ne "") { "$($_.ParentNumber)-" } else { "" }
    [string] $child = $null
    if($_.ChildName -ne ""){
        $childPrefix = if($_.ChildNumber -ne "") { "$($_.ChildNumber)-" } else { "" }
        $child = "\$childPrefix$($_.ChildName)"
    }

    $folderName = "$prefix$($_.ParentName)$child"
    if(-not (Test-Path $folderName)) {
        New-Item -Type Directory -Name "$folderName" -Force #-WhatIf
        Set-Location -Path $folderName
        $content = if($_.ChildName -ne "") { $_.ChildText } else { $_.ParentText }
        $content
        New-Item -ItemType File -Name "default.txt" -Value "Title: $($content)" #-WhatIf
        Set-Location $path 
    }
}

return

$folder | % { 

    $_ -match "(?:(\d)-)?([\w ]+)(?:\\(\d)-(.*))?" > $null
    "@{ ParentNumber=`"$($Matches[1])`"; ParentName=`"$($Matches[2] -replace " ",'')`"; ParentText=`"$($Matches[2])`"; ChildNumber=`"$($Matches[3])`"; ChildName=`"$($Matches[4] -replace "[ \(\)]",'' -replace "ä",'ae' -replace "ü",'ue' )`"; ChildText=`"$($Matches[4])`" }" 
    } | clip.exe