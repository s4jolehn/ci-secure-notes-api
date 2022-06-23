import {writable} from "svelte/store";

export const noteStore = writable([]);
export const searchQuery = writable("");
export const categoryStore = writable([]);
export const selectedCategory = writable(null);
