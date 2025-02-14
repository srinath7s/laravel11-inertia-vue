<template>
    <div>
        <h1>Edit Post</h1>
        <form @submit.prevent="submit">
            <label>
                Title:
                <input v-model="form.title" type="text" />
            </label>
            <label>
                Content:
                <textarea v-model="form.content"></textarea>
            </label>
            <button type="submit">Update</button>
        </form>
    </div>
</template>

<script>
import { useForm } from '@inertiajs/inertia-vue3';

export default {
    props: {
        post: Object,
    },
    setup(props) {
        const form = useForm({
            title: props.post.title,
            content: props.post.content,
        });

        const submit = () => {
            form.put(`/posts/${props.post.id}`);
        };

        return { form, submit };
    },
};
</script>
