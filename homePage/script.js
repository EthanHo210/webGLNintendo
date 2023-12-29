let list = document.getElementById('list');
let filter = document.querySelector('.filter');
let star = document.getElementById('star');
let listOfGame = [
   {
      id: 1,
      name: 'Super Mario',
      image: 'image/image.webp',
      rate: '<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>',
      nature: {
         ageValue: ['From 5 to 16', '>16'],
         timeValue: ['Less than 3 hours', 'From 3 to 5 hours', 'From 5 to 8 hours'],
         typeValue: ['Action', 'Adventure', 'Kid'],
         rateValue: '3 Stars',
      }
   },
   {
      id: 2,
      name: 'Star Wars: Rogue Squadron',
      image: 'image/image1.png',
      rate: '</i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>',
      nature: {
         ageValue: ['>16'],
         timeValue: ['Less than 3 hours', 'From 3 to 5 hours' ,'From 5 to 8 hours'],
         typeValue:['Action'],
         rateValue: '3 Stars',
      }
   },
   {
      id: 3,
      name: 'Name product The Legend of Zelda: Ocarina of Time',
      image: 'image/image3.jpg',
      rate: '<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>',
      nature: {
         ageValue: ['>16'],
         timeValue: ['From 3 to 5 hours', 'From 5 to 8 hours'],
         typeValue: ['Adventure', 'Action'],
         rateValue: '5 Stars',
      }
   },
   {
      id: 4,
      name: 'Name product Mario Golf',
      image: 'image/image2.jpg',
      rate: '<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>',
      nature: {
         ageValue: ['From 5 to 16', '>16'],
         timeValue: ['Less than 3 hours', 'From 3 to 5 hours'],
         typeValue:['Kid'],
         rateValue: '3 Stars',
      }
   },
   {
      id: 5,
      name: 'Name product F-Zero X',
      image: 'image/image4.jpg',
      rate: '<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>',
      nature: {
         ageValue: ['>16'],
         timeValue: ['Less than 3 hours', 'From 3 to 5 hours'],
         typeValue: ['Racing', 'Action'],
         rateValue: '4 stars',
      }
   },
   {
      id: 6,
      name: 'Name product Mario Kart 64',
      image: 'image/image5.jpg',
      rate: '<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>',
      nature: {
         ageValue: ['>16'],
         timeValue: ['Less than 3 hours', 'From 3 to 5 hours'],
         typeValue:['Racing', 'Kid'],
         rateValue: '4 Stars',
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
      newTitle.classList.add('nameG');
      newTitle.innerText = items.name;
      newItem.appendChild(newTitle);

      // create star
      let newStar = document.createElement('div');
      newStar.classList.add('title');
      newStar.innerHTML = items.rate;
      newItem.appendChild(newStar);

      list.appendChild(newItem);
   })
}


filter.addEventListener('submit', function(event){
   
   event.preventDefault();
   let valueFilter = event.target.elements;
   productFilter = listOfGame.filter(items => {
      // check age
      if(valueFilter.age.value != ''){
         if(!items.nature.ageValue.includes(valueFilter.age.value)){
            return false;
         }
      }

      // check type of game
      if(valueFilter.type.value != ''){
         if(!items.nature.typeValue.includes(valueFilter.type.value)){
            return false;
         }
      }
      // check time
      if(valueFilter.time.value != ''){
         if(!items.nature.timeValue.includes(valueFilter.time.value)){
            return false;
         }
      }
      // check star
      if(valueFilter.rate.value != ''){
         if(items.nature.rateValue != valueFilter.rate.value){
            return false;
         }
      }
      return true;
   })
   showProduct(productFilter);
})
