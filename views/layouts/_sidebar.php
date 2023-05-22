<aside
    x-bind:class="sidebarIsOpen ? 'lg:max-w-[var(--sidebar-width)]' : 'lg:max-w-[var(--collapsed-sidebar-width)]'"
    class="w-[var(--sidebar-width)] h-screen fixed inset-y-0 left-0 overflow-hidden bg-blue-100 border-2 border-dashed border-red-600"
    @click.outside="sidebarIsOpen = false"
>
    <button @click="sidebarIsOpen = !sidebarIsOpen">Toggle</button>
</aside>