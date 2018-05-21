function sok(string, sokarray) {
    // var Fuse = require('fuse.js');
     //var jsVar = require('xjobblista.php')
     
     var options = {
       shouldSort: true,
       tokenize: true,
       matchAllTokens: true,
       threshold: 0.5,
       location: 0,
       distance: 1000,
       maxPatternLength: 32,
       minMatchCharLength: 2,
       keys: [
         "description",
        "Title"
       ]
     };
  
     var langden = String(string);
  
     if(langden.length < 3){
       options.threshold = 0;
     }
     else{
       options.threshold = 0.5;
     }
     
     var fuse = new Fuse(sokarray, options); // "list" is the item array
   
     var result = fuse.search(string);
     //console.log(result);
     
     return result;
   }
   