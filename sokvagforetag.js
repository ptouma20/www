function sokforetag(string) {
   //var jsVar = require('xjobblista.php')
   var options = {
     shouldSort: true,
     //tokenize: true,
     //matchAllTokens: true,
     threshold: 0.6,
     location: 0,
     distance: 100,
     maxPatternLength: 32,
     minMatchCharLength: 2,
     keys: [
       "title"
     ]
   };
 
   var list = [
     {
       title: "Old Man's War",
       author: {
         firstName: "John",
         lastName: "Scalzi",
         egenskaper: "C"
       }
     },
     {
       title: "The Lock Artist",
       author: {
         firstName: "Steve",
         lastName: "Hamilton",
         egenskaper: "C++"
       }
     },
     {
       title: "HTML5",
       author: {
         firstName: "Remy",
         lastName: "Sharp",
         egenskaper: "C#"
       }
     },
     {
       title: "Right Ho Jeeves",
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
       title: "Thank You Jeeves",
       author: {
         firstName: "P.D",
         lastName: "Woodhouse",
         egenskaper: "C"
       }
     },
     {
       title: "The DaVinci Code",
       author: {
         firstName: "Dan",
         lastName: "Brown",
         egenskaper: "C"
       }
     },
     {
       title: "Angels & Demons",
       author: {
         firstName: "Dan",
         lastName: "Brown",
         egenskaper: "C"
       }
     },
     {
       title: "The Silmarillion",
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

   var fuse = new Fuse(list, options);
 
   var result = fuse.search(string);

   return result;
 }
 