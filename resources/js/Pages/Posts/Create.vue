<template>
    <div>
        <h1>Create Post</h1>
        <form @submit.prevent="submit">
            <label>
                Title:
                <input v-model="form.title" type="text" />
            </label>
            <label>
                Content:
                <textarea v-model="form.content"></textarea>
            </label>
            <button type="submit">Submit</button>
        </form>
    </div>
</template>

<script>
import { useForm } from '@inertiajs/inertia-vue3';

export default {
    setup() {
        const form = useForm({
            title: '',
            content: '',
        });

        const submit = () => {
            form.post('/posts');
        };

        return { form, submit };
    },
};
</script>
