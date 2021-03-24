// tailwind.config.js
module.exports = {
    purge: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue"
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            backgroundImage: {
                "wave-white": "url('/public/assets/hero-wave.jpg')"
            },
            zIndex: {
                "-10": -10,
                "-20": -20,
                "-25": -25,
                "-30": -30,
                "-40": -40,
                "-50": -50,
                "-75": -75,
                "-100": -100
            }
        }
    },
    variants: {
        extend: {}
    },
    plugins: []
};
