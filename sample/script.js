let list = document.getElementById('list');
let filter = document.querySelector('.filter');
let listOfGame = [
   {
      id: 1,
      name: 'Name product Super Mario',
      image: 'image/image.webp',
      nature: {
         ageValue: ['From 5 to 16', '>16'],
         timeValue: ['Less than 3 hours','From 3 to 5 hours', 'From 5 to 8 hours'],
      }
   },
   {
      id: 2,
      name: 'Name product Star Wars: Rogue Squadron',
      image: 'image/image1.png',
      nature: {
         ageValue: ['>16'],
         timeValue: ['Less than 3 hours','From 3 to 5 hours' ,'From 5 to 8 hours'],
      }
   },
   {
      id: 3,
      name: 'Name product The Legend of Zelda: Ocarina of Time',
      image: 'image/image3.jpg',
      nature: {
         ageValue: ['>16'],
         timeValue: ['From 3 to 5 hours', 'From 5 to 8 hours'],
      }
   },
   {
      id: 4,
      name: 'Name product Mario Golf',
      image: 'image/image2.jpg',
      nature: {
         ageValue: ['From 5 to 16', '>16'],
         timeValue: ['Less than 3 hours','From 3 to 5 hours'],
      }
   },
   {
      id: 5,
      name: 'Name product F-Zero X',
      image: 'image/image4.jpg',
      nature: {
         ageValue: ['>16'],
         timeValue: ['Less than 3 hours', 'From 3 to 5 hours'],
      }
   },
   {
      id: 6,
      name: 'Name product Mario Kart 64',
      image: 'image/image5.jpg',
      nature: {
         ageValue: ['>16'],
         timeValue: ['Less than 3 hours', 'From 3 to 5 hours'],
      }
   },
];

let productFilter = listOfGame;
showProduct(productFilter);
function showProduct(productFilter){
   list.innerHTML = '';
   productFilter.forEach(items => {
      let newItem = document.createElement('div');
      newItem.classList.add('items');

      // create Image
      let newImage = new Image();
      newImage.src = items.image;
      newItem.appendChild(newImage);

      // create name product
      let newTitle = document.createElement('div');
      newTitle.classList.add('title');
      newTitle.innerText = items.name;
      newItem.appendChild(newTitle);

      list.appendChild(newItem);
   })
}

filter.addEventListener('submit', function(event){
   event.preventDefault();
   let valueFilter = event.target.elements;
   productFilter = listOfGame.filter(items => {
      // check age
      if(valueFilter.age.value != ''){
         if(items.nature.ageValue.includes(valueFilter.age.value)){
            return false;
         }
      }
     
      // check time
      if(valueFilter.time.value != ''){
         if(!items.nature.timeValue.includes(valueFilter.time.value)){
            return false;
         }
      }
      return true;
   })
   showProduct(productFilter);
})
