$importFile = "../PrinzenpaareMitNamen.CSV"
$targetPath = "./couples"
$sourcePath = "./couples_old"

$coupleTemplate = @"
Title: {YEAR}

----

Peerage:

{PRINCESS}
{PRINCE}

----

Civil: {NAME2} und {NAME1}
"@;


$couples = Get-Content -Path $importFile | ConvertFrom-Csv;

foreach ($couple in $couples) {
  $target = "couples/0_$($couple.Jahr -replace '\+', '_')";
  if(Test-Path -Path $target){
    $text = $coupleTemplate -replace '{YEAR}', $couple.Jahr -replace '{PRINCESS}', $couple.Prinzessin -replace '{PRINCE}', $couple.Prinz -replace '{NAME2}', $couple.Name2 -replace '{NAME1}', $couple.Name1;
    New-Item -ItemType File -Path $target -Name royal-couple.txt -Value $text;
  }
  else {
    Write-Error "Path is missing: $target !"
  }
}
