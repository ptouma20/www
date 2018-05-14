function sok(string, array) {
  // var Fuse = require('fuse.js');
   //var jsVar = require('xjobblista.php')
   var options = {
     shouldSort: true,
     tokenize: true,
     matchAllTokens: true,
     threshold: 0,
     location: 0,
     distance: 1000,
     maxPatternLength: 32,
     minMatchCharLength: 2,
     keys: [
       "title"
     ]
   };
 
   var list = [
     {
       title: "Modiga studenter titta hit! Vi söker en självsäker student med kunskaper inom c++ och objektorienterad programmering i allmänhet. Databaskunskaper är meriterande men inget krav.",
       author: {
         firstName: "John",
         lastName: "Scalzi",
         egenskaper: "C"
       }
     },
     {
       title: "Vi letar efter någon med kunskaper inom python och pascal för utveckling av en websida. Vill du lägga många timmar framför datorn med programmering är du av rätt virke.",
       author: {
         firstName: "Steve",
         lastName: "Hamilton",
         egenskaper: "C++"
       }
     },
     {
       title: "Utveckla våran websida! PHP, javascript och css kommer användas men vi är öppna för andra förslag om du har smarta ideér. ",
       author: {
         firstName: "Remy",
         lastName: "Sharp",
         egenskaper: "C#"
       }
     },
     {
       title: "Programmera C# med oss! det blir kul sa dom",
       author: {
         firstName: "P.D",
         lastName: "Woodhouse",
         egenskaper: "C"
       }
     },
     {
       title: "The Code of the Wooster",
       author: {
         firstName: "P.D",
         lastName: "Woodhouse",
         egenskaper: "C"
       }
     },
     {
       title: "Vi söker en student som har erfarenhet inom c++ och objekt-orienterad programmering för webbdesign av en hemsida",
       author: {
         firstName: "P.D",
         lastName: "Woodhouse",
         egenskaper: "C"
       }
     },
     {
       title: "Vi söker javascripts kunniga studenter för utveckling av en mobilapp till våran intustri. Kunskaper inom pappersindustrin är meriterande",
       author: {
         firstName: "Dan",
         lastName: "Brown",
         egenskaper: "C"
       }
     },
     {
       title: "Vi söker din mamma för c-programmering för att hon är ful och äcklig, humor är en meriterande egenskap.",
       author: {
         firstName: "Dan",
         lastName: "Brown",
         egenskaper: "C"
       }
     },
     {
       title: "Vi vill ha en student som kan java",
       author: {
         firstName: "J.R.R",
         lastName: "Tolkien",
         egenskaper: "C"
       }
     },
     {
       title: "Syrup",
       author: {
         firstName: "Max",
         lastName: "Barry",
         egenskaper: "C"
       }
     },
     {
       title: "The Lost Symbol",
       author: {
         firstName: "Dan",
         lastName: "Brown",
         egenskaper: "C"
       }
     },
     {
       title: "The Book of Lies",
       author: {
         firstName: "Brad",
         lastName: "Meltzer",
         egenskaper: "C"
       }
     },
     {
       title: "Lamb",
       author: {
         firstName: "Christopher",
         lastName: "Moore",
         egenskaper: "C"
       }
     },
     {
       title: "Fool",
       author: {
         firstName: "Christopher",
         lastName: "Moore",
         egenskaper: "C"
       }
     },
     {
       title: "Incompetence",
       author: {
         firstName: "Rob",
         lastName: "Grant",
         egenskaper: "C"
       }
     },
     {
       title: "Fat",
       author: {
         firstName: "Rob",
         lastName: "Grant",
         egenskaper: "C"
       }
     },
     {
       title: "Colony",
       author: {
         firstName: "Rob",
         lastName: "Grant",
         egenskaper: "C"
       }
     },
     {
       title: "Backwards, Red Dwarf",
       author: {
         firstName: "Rob",
         lastName: "Grant",
         egenskaper: "C"
       }
     },
     {
       title: "The Grand Design",
       author: {
         firstName: "Stephen",
         lastName: "Hawking",
         egenskaper: "C"
       }
     },
     {
       title: "The Book of Samson",
       author: {
         firstName: "David",
         lastName: "Maine",
         egenskaper: "[Javascript]"
       }
     },
     {
       title: "The Preservationist",
       author: {
         firstName: "David",
         lastName: "Maine",
         egenskaper: "[Java]"
       }
     },
     {
       title: "Fallen",
       author: {
         firstName: "David",
         lastName: "Maine",
         egenskaper: "[C++]"
       }
     },
     {
       title: "Monster 1959",
       author: {
         firstName: "David",
         lastName: "Maine",
         egenskaper: "[C] Java."
       }
     }
   ]
 
   // var fuse = new Fuse (list, options); // "list" is the item array
 
   // var result = fuse.search("dav");
   // console.log(result);
   //sok("dav");
 
   var langden = String(string);
   //console.log(langden.length);
   if(langden.length < 5){
     options.threshold = 0;
   }
   
   var fuse = new Fuse(array, options); // "list" is the item array
 
   var result = fuse.search(string);
   //console.log(result);
   return result;
 }
 