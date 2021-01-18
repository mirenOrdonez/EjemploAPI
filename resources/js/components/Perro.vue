<template>
  <div class="row">
    <div v-for="usuario in datos" :key="usuario.id">
      <div class="col-sm-2">
        <div class="card" style="width: 12rem">
          <img :src="'https://placedog.net/' + usuario.id + '00/' + usuario.id + '00?random'" class="card-img-top" alt="..."/>
          <h5 class="card-title">Card title</h5>
          <p class="card-text">{{ usuario.email }}</p>
          <a href="#" class="btn btnprimary">{{ usuario.nombre }}</a>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  //una función para obtener un dato distinto en cada elemento
  data() {
    axios
      .get(
        "http://127.0.0.1/EjerciciosLaravel/EjemploAPI/public/api/usuarios"
      )
      .then((respuesta) => {
        this.datos = respuesta.data;
      })
      .catch((error) => console.log(error));
    return {
      datos: {},
    };
  },
};
</script>
 
