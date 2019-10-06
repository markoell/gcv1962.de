#
# Menu
# Menu Id: imMnMn
#
#

#$web = Invoke-WebRequest -Uri "http://gcv1962.de/files/Ablage_GCV_Gesamt/index.html" # "http://gcv1962.de"

Function Correct-Encoding(){
   
    Process{
        [Text.Encoding]::UTF8.GetString([Text.Encoding]::Default.GetBytes($PSItem))
    }
}

Function Get-HtmlItemById(){

    Param( [string] $Id )

    Process{
        $PSItem.getElementById("$Id")
    }
}

Function Get-MenuList(){

    Process{
        $PSItem.ParsedHtml | Get-HtmlItemById -Id "imMnMn" | Select-Object -ExpandProperty firstChild
    }
}

Function Get-PageContent(){
    
    Process{
        $PSItem.ParsedHtml | Get-HtmlItemById -Id "imContent" 
    }
}

Function Handle-ListNode(){
Param($Item)
    
    if( $Item.tagName -match "LI" ) { Print-Node -Item $Item -Level $Level}
    
}

Function Handle-Links(){
Param($Item)
    
    if( $Item.tagName -match "A" ) { $(Print-Node -Item $Item -Level $Level)}
}

Function Handle-ChildNodes(){
Param($Item)
    
    if($Item.tagName -notmatch "LI|UL") { return }

    if($Item.hasChildNodes){
            $Item.childNodes | Split-Nodes -Level $($Level + 1)
    }
}

Function Split-Nodes(){
Param( [int] $Level)
    Begin{
        #Write-Host -Object "Level = $Level"
        #Write-Host -Object " " -NoNewline
    }
    Process{
            #Handle-ListNode -Item $PSItem
            Handle-Links -Item $PSItem
            Handle-ChildNodes -Item $PSItem
    }
    End{}
}

Function Print-Node(){
Param( $Item, $Level )

    #$properties = @{
    #        TagName = $Item.tagName;
    #        Level = $level;
    #        Children = $Item.childNodes | Split-Nodes -Level $($Level + 1)
    #}

    (Print-Ident -Level $Level) + (Print-Item -Item $Item | Correct-Encoding)

    #return New-Object -ComObject psobject -Property $properties
}

Function Print-Ident(){
Param ([int] $Level)
        "{0,-$level}" -f " "
}

Function Print-Item(){
Param($Item)

    Process{
        "$(if($Item.tagName -eq "SPAN"){ " $($Item.innerText)" })$(if($Item.tagName -eq "A"){ " $($Item.innerText) --- $($Item.href.split(':')[-1])" })"
    }
}


#$web | Get-MenuList | Split-Nodes -Level 1
