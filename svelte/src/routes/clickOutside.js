export function clickOutside (node) {
    const handleClick = event => {
        if (node && !node.contains(event.target) && !event.defaultPrevented && node.dataset.open === "true") {
            node.dispatchEvent(
                new CustomEvent('click_outside', node)
            )
        }
    }
    document.addEventListener('click', handleClick, true);
    return {
        destroy() {
            document.removeEventListener('click', handleClick, true);
        }
    }
}