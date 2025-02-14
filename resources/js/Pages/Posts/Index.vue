<template>
    <div>
        <h1>All Posts</h1>
        <button @click="$inertia.get('/posts/create')">Create New Post</button>
        <ul>
            <li v-for="post in posts" :key="post.id">
                {{ post.title }}
                <button @click="$inertia.get(`/posts/${post.id}/edit`)">
                    Edit
                </button>
                <button @click="deletePost(post.id)">Delete</button>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    props: {
        posts: Array,
    },
    methods: {
        deletePost(id) {
            if (confirm("Are you sure?")) {
                this.$inertia.delete(`/posts/${id}`);
            }
        },
    },
};
</script>
