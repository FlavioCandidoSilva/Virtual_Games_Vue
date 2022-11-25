<template>
    <main>
      <header class="bg-slate-800 rounded-2xl">
        <Link class="bg-white" href="/">Home</Link>
        <a use:inertia href="/teste">About</a>
        <Link href="/teste2">Contact</Link>
      </header>
      <article>
        <slot />
      </article>
    </main>
  </template>

  <script>
  import { Link } from '@inertiajs/inertia-vue3'

  export default {
    components: {
      Link,
    }
  }
  </script>
