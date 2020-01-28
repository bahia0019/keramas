/**
 * Controls Fade elements.
 */
const fadeIn = function() {
    const fade = document.querySelectorAll(".fade")

    const tl = new TimelineMax()
    for (i = 0; i < fade.length; i++) {
        tl.from(
            fade,
            1.5,
            {
                transform: "translateY(30px)",
                autoAlpha: 0,
                ease: Elastic.easeOut.config(1.2, 0.75)
            },
            ".5"
        )
    }
}
fadeIn()

/**
 *
 *
 */
const staggerFadeIn = function() {
    const fade = document.querySelectorAll(".recent-post-thumb")

    const tl = new TimelineMax()
    tl.staggerFrom(
        fade,
        3,
        {
            transform: "translateY(50px)",
            autoAlpha: 0,
            ease: Elastic.easeOut.config(1.2, 0.75)
        },
        0.2
    )
}
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting === true) {
            staggerFadeIn()
        }
    })
})

const items = document.querySelectorAll(".recent-post-thumbs")

items.forEach((item, index) => {
    observer.observe(item, index)
})
