<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Posts</title>
    <style>
        body {
            font-family: sans-serif;
            max-width: 800px;
            margin: 2rem auto;
            color: #333;
        }

        .notReady {
            opacity: 0;
        }

        .ready {
            opacity: 1;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            background: #f9f9f9;
            border: 1px solid #eee;
            padding: 1rem;
            margin-bottom: 1rem;
            border-radius: 5px;
        }

        h3 {
            margin-top: 0;
        }

        .loading {
            text-align: center;
            font-style: italic;
            color: #888;
        }
    </style>
</head>

<body>

    <div id="app">

        <h1>Gerenciador de Posts</h1>

        <div v-if="loading" class="loading">
            <p>Carregando posts...</p>
        </div>
        <div :class="{ ready: !loading, notReady: loading }">
            <div v-else>
                <ul v-if="posts.length > 0">
                    <li v-for="post in posts" :key="post.id">
                        <h3>@{{ post.title }}</h3>
                        <p>@{{ post.content }}</p>
                    </li>
                </ul>
                <p v-else>Nenhum post encontrado. Crie um via API!</p>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        const {
            createApp,
            ref,
            onMounted
        } = Vue;

        createApp({
            setup() {
                const posts = ref([]);
                const loading = ref(true);

                const fetchPosts = async () => {

                    try {
                        const response = await axios.get('/api/posts');
                        posts.value = response.data;
                    } catch (error) {
                        alert('Não foi possível carregar os posts.');
                    } finally {
                        loading.value = false;
                    }
                };

                onMounted(() => {
                    fetchPosts();
                });

                return {
                    posts,
                    loading
                };
            }
        }).mount('#app');
    </script>

</body>

</html>
