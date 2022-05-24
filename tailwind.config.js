module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
    ],
    content: [],
    theme: {
        extend: {},
        colors: {
            white: {
                light: '#FFFFFF',
                DEFAULT: '#F5F5F5',
            },
            red: {
                DEFAULT: '#E02D00',
            },
            green: {
                DEFAULT: '#0E8F00',
            },
            black: {
                DEFAULT: '#1B110D',
                dark: '#000000'
            }
        }
    },
    plugins: [],
}
