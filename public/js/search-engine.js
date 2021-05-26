
function startSearch(){
searchString = document.searchForm.searchText.value; 
if(searchString != ""){
searchEngine = document.searchForm.whichEngine.selectedIndex + 1;
finalSearchString = "";

if(searchEngine == 1){
finalSearchString = "http://evergreen.tsu.ge/opac/ka-GE/skin/default/xml/rresult.xml?rt=keyword&tp=keyword&t=" + searchString;
}

if(searchEngine == 2){
finalSearchString = "http://evergreen.tsu.ge/opac/ka-GE/skin/default/xml/rresult.xml?rt=title&tp=title&t=" + searchString;
}

if(searchEngine == 3){
finalSearchString = "http://evergreen.tsu.ge/opac/ka-GE/skin/default/xml/rresult.xml?rt=author&tp=author&t=" + searchString;
}

if(searchEngine == 4){
finalSearchString = "http://evergreen.tsu.ge/opac/ka-GE/skin/default/xml/rresult.xml?rt=subject&tp=subject&t=" + searchString;
}

if(searchEngine == 4){
finalSearchString = "http://evergreen.tsu.ge/opac/ka-GE/skin/default/xml/rresult.xml?rt=series&tp=series&t=" + searchString;
}

location.href = finalSearchString;
}
}

