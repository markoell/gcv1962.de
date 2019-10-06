$topics = @(
#"Aktuelles"
#"Vereinsorgane"
#"Akteure / Gruppen"
#"Unterstützungsteams"
#"Chronik"

##"Aktuelles"
#"Neues"
#"Termine"
#"Jahreshauptversammlung"
#"nächste Termine"
#"Kartenvorverkauf"
#"Prunksitzungen"
#"Mitglied werden"

##"Vereinsorgane"
#"Präsidium"
#"Vorstandschaft"
#"Komitee"
#"Elferrat"
#"Jugendausschuss"

##"Akteure / Gruppen
#"Solisten"
#"Garden"
#"Showgruppen"
#"Musikalisches"

##"Akteure / Gruppen\Solisten"
#"Moderatoren"
#"Kater Tim"
#"Bütten"
#"QCC"

##"Akteure / Gruppen\Garden"
#"Tanzmariechen"
#"Minigarde"
#"Jugendgarde"
#"Juniorengarde"
#"Prinzengarde"

##"Akteure / Gruppen\Showgruppen"
#"Rebläuse"
#"Just Dance"
#"Glamour Girls"
#"Männerballett"
#"Seniorenballett"
#"Hobbits"

##"Akteure / Gruppen\Musikalisches"
#"Altstadtjodler"
#"Guggenmusik"
#"Schlosssänger"
#"LautLos"

##"Unterstützungsteams"
#"Einlassteam"
#"Garderobenteam"
#"Schminkteam"
#"Fototeam"
#"Licht & Ton Team"
#"Aufbauteam"
#"Dekoteam"
#"Stempelteam"
#"Vereinsheim"
#"Bauteam"
#"Umzugsteam"

#"Chronik"
"Vereinschronik"
"Präsidenten"
"Prinzenpaare"
"Symbolfigur"
"Ehrungen"
"Archiv / Presseberichte"
"Jahresorden"
)



$topics | % {$counter = 1}{
$directory = New-Item -ItemType Directory -Name "$counter-$($_.Replace("ä","ae").Replace("ö","oe").Replace("ü","ue").Replace("Ä","Ae").Replace("Ö","Oe").Replace("Ü","Ue").Replace(" ",'').Replace("/",''))"
New-Item -ItemType File -Path $directory.FullName -Name default.txt -Value "Title: $_$([System.Environment]::NewLine)----"
$counter++
}