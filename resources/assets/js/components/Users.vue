<template>
    <div>
        <h1>Users</h1>

        <ul>
            <li v-for="user in users" :class="'id' + user.id">{{user.name}}
                <button @click="boldiraj(user.id)">Bold</button>
                <button @click="deleteUser(user.id)">Delete</button>
            </li>
        </ul>
    </div>
</template>
<script>
    export default {
        props: ['usersdata'],
        data() {
            return {
                users: []
            }
        },
        mounted() {
            this.users = JSON.parse(this.usersdata);
//            axios.get('/api/users').then((response) => {
//               this.users = response.data
//            });
        },

        methods: {
            boldiraj(id) {
                $('.id' + id).css('font-weight', 'bold');
            },

            deleteUser(id) {
                axios.delete('/api/users/delete', {
                    data: {
                        id: id
                    }
                }).then((response) => {
                    axios.get('/api/users').then((response) => {
                        this.users = response.data
                        EventBus.$emit('deleted')
                    });
                })
            }
        }

    }
</script>