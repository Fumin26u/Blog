module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
    ],
    content: [],
    theme: {
        extend: {},
        fontFamily: {
            'heading': ['Ostrich Sans', 'Yu Gothic Medium', 'YuGothicMedium', 'メイリオ', 'Meiryo', 'Arial'],
            'meiryo': ['メイリオ', 'Meiryo', 'Arial']
        },
        colors: {
            white: {
                DEFAULT: '#FFFFFF',
                dark: '#F5F5F5',
            },
            red: {
                DEFAULT: '#E02D00',
            },
            green: {
                DEFAULT: '#0E8F00',
            },
            brown: {
                DEFAULT: '#32160B',
            },
            black: {
                DEFAULT: '#1B110D',
                dark: '#000000'
            }
        }
    },
    plugins: [],
}
