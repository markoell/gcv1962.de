$template = 'Title: {TITLE}
----
Date: {DATE}
----
Place: {PLACE}
----
Text: {TEXT}

'

Function Convert-CsvToTxtFiles(){
Begin { $counter = 0 }
Process{
    [DateTime] $date = [datetime] "$($PSItem.Datum -replace "(\d{2}).(\d{2}).(\d{4})",'$3-$2-$1' ) $($PSItem.Uhrzeit -replace " Uhr|ab ", '')"
    $item = New-Item -ItemType Directory -Name ($date.ToString("yyyyMMddhhmm") + "_Termin")
    $template -replace "{TITLE}", $PSItem.Titel -replace "{DATE}", $date.ToString() -replace "{PLACE}", $PSItem.Ort -replace "{TEXT}", $PSItem.Beschreibung  > "$($item.FullName)\Termin.txt"
    }

}

Import-Csv .\TermineKampagne_2018-2019.csv -Delimiter ';' | Convert-CsvToTxtFiles