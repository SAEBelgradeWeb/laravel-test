<template>
    <div>
    <h1>Ja sam {{name}} komponenta</h1>
    <h2>{{textPlaceholder}}</h2>
    </div>
</template>

<script>
    export default {
        props: ['name'],
        data() {
          return {
              textPlaceholder: 'Ovo pre brisanja'
          }
        },
        mounted() {
            EventBus.$on('deleted', () => {
                this.textPlaceholder = "Sad sam obrisao"
            })
        }
    }
</script>