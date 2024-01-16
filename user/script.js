let list = document.getElementById('list');
let filter = document.querySelector('.filter');
let star = document.getElementById('star');
var a = document.createElement('a');
let listOfGame = [
   {
      id: 1,
      name: 'Super Mario',
      image: 'image/Super_Mario_64_Boxart.png',
      rate: '<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>',
      href: '../individualSiteSample/Mario.php',
      nature: {
         ageValue: ['From 5 to 11', 'From 11 to 16', '>16'],
         timeValue: ['Less than 3 hours', 'From 3 to 5 hours', 'From 5 to 8 hours'],
         typeValue: ['Action', 'Adventure', 'Kid'],
         rateValue: '3 Stars',
      }
   },
   {
      id: 2,
      name: 'Shaolin',
      image: 'image/shaolinj.jpg',
      rate: '<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>',
      href: '../individualSiteSample/Shaolin.php',
      nature: {
         ageValue: ['>16', 'From 11 to 16'],
         timeValue: ['Less than 3 hours', 'From 3 to 5 hours' ,'From 5 to 8 hours'],
         typeValue:['Action'],
         rateValue: '4 Stars',
      }
   },
   {
      id: 3,
      name: 'Kagero deception 2',
      image: './image/Kagero_eur.webp',
      rate: '<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>',
      href: '../individualSiteSample/Kagero.php',
      nature: {
         ageValue: ['>16'],
         timeValue: ['From 3 to 5 hours', 'From 5 to 8 hours'],
         typeValue: ['Adventure', 'Action'],
         rateValue: '5 Stars',
      }
   },
   {
      id: 4,
      name: 'Conker Bad Fur Day',
      image: 'image/Conkersbfdbox.jpg',
      rate: '<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>',
      href: '../individualSiteSample/Conker.php',
      nature: {
         ageValue: ['>16'],
         timeValue: ['Less than 3 hours', 'From 3 to 5 hours'],
         typeValue:['Kid'],
         rateValue: '4 Stars',
      }
   },
   {
      id: 5,
      name: 'Sonic the hedgehog 2',
      image: './image/download.jpg',
      rate: '<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>',
      href: '../individualSiteSample/Sonic.php',
      nature: {
         ageValue: ['>16', 'From 11 to 16'],
         timeValue: ['Less than 3 hours', 'From 3 to 5 hours'],
         typeValue: ['Racing', 'Action'],
         rateValue: '4 stars',
      }
   },
   // {
   //    id: 6,
   //    name: 'Name product Mario Kart 64',
   //    image: 'image/image5.jpg',
   //    rate: '<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>',
   //    nature: {
   //       ageValue: ['>16'],
   //       timeValue: ['Less than 3 hours', 'From 3 to 5 hours'],
   //       typeValue:['Racing', 'Kid'],
   //       rateValue: '4 Stars',
   //    }
   // },
];

let productFilter = listOfGame;
showProduct(productFilter);
function showProduct(productFilter){
   list.innerHTML = '';
   productFilter.forEach(items => {
      let newItem = document.createElement('a');
      newItem.href = items.href;
      newItem.classList.add('items');

      // create Image
      let newImage = new Image();
      newImage.src = items.image;
      newItem.appendChild(newImage);

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
