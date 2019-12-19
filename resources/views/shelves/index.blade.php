<!DOCTYPE html>
<html>
<head>
  <title>Keepers</title>
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <h1>Shelves</h1>
  <div id="root">
    <ul>
      <li v-for="shelf in shelves">@{{ shelf.name }}</li
    </ul>

    <h2>New Shelf</h2>
    Shelf name: <input type="text" id="input" v-model="newShelfName">
      <button @click="createShelf">Create</button>
  </div>

  <script>
   var app = new Vue({
     el:"#root",
     data:{
       shelves: [],
       newShelfName: '',
     },
     mounted(){
       axios.get("{{ route ('api.shelves.index') }}")
       .then(response =>{
         // handle success
         this.shelves = response.data;
       })
       .catch(response =>{
         // handle errors
         console.log(response);
       })
     },

     methods: {
       createShelf: function(){
         axios.post("{{ route ('api.shelves.store') }}",
       {
         name: this.newShelfName
       })
       .then(response =>{
         //handle success
         this.shelves.push(response.data);
         this.newShelfName = '';
       })
       .catch(response =>{
         //handle errors
         console.log(response);
       })
       }
     }
   });
   </script>
</body>
</html>
