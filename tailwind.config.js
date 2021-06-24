const gutenberg = require('tailwindcss-gutenberg');

module.exports = {
  mode: 'jit',
  purge: {
    content: [
      './safelist.txt',
      './app/**/*.php',
      './resources/**/*.php',
      './resources/**/*.vue',
      './resources/**/*.js',
    ],
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    fontFamily: {
      body: ['Montserrat', 'ui-sans-serif', 'system-ui'],
      // display: ['"Montserrat Alternates"', 'ui-sans-serif', 'system-ui'],
    },
    minHeight: {
      header: '40em',
    },
    container: {
      center: true,

      padding: {
        DEFAULT: '1rem',
        sm: '1.5rem',
        lg: '2rem',
        xl: '2,.5rem',
        '2xl': '3rem',
      },
    },
    backgroundSize: {
      auto: 'auto',
      cover: 'cover',
      contain: 'contain',
      '1/2': '50% auto',
    },
    extend: {
      backgroundImage: () => ({
        hexagons: "url('../images/hexagon-background.svg')",
        'orange-hexagons':
          "linear-gradient(210deg, #fff, #fff 15vw, transparent 15.1vw, transparent), linear-gradient(30deg, #fff, #fff 15vw, transparent 15.1vw, transparent), url('../images/three-hexagons-background.svg')",
        'purple-hexagons':
          "url('../images/three-hexagons-purple-background.svg')",
        // 'black-corner':
        //   'linear-gradient(to bottom left, #fff, #fff 8em, #000 8.05em, #000)',
        // 'header-slant': "url('../images/slant-background.svg')",
        // 'header-slant':
        //   'linear-gradient(to top right, #fff, #fff 12em, transparent 12.05em, transparent)',
        'violet-slant':
          'linear-gradient(to bottom left, #fff, #fff 8em, transparent 8.05em, transparent),  linear-gradient(to top right, #fff, #fff 12em, transparent 12.05em, transparent)',
      }),
      colors: {
        gray: {
          950: '#091420',
        },
        'strong-magenta': '#0033ff',
        orange: {
          DEFAULT: '#E78C38',
          50: '#FFFFFF',
          100: '#FDF5EE',
          200: '#F7DBC1',
          300: '#F2C193',
          400: '#f0c18c',
          500: '#E78C38',
          600: '#D37219',
          700: '#A55A14',
          800: '#78410E',
          900: '#4A2809',
        },
        violet: {
          DEFAULT: '#31125C',
          50: '#F5F0FC',
          100: '#E7DBF8',
          200: '#CAB0F0',
          300: '#AE85E8',
          400: '#915BDF',
          500: '#7530D7',
          600: '#5E22B2',
          700: '#471A87',
          800: '#31125C',
          900: '#1A0A31',
        },
      },
      typography: {
        DEFAULT: {
          css: {
            hr: {
              borderTopColor: null,
            },
            h2: {
              fontSize: '2.25rem',
              fontWeight: 800,
            },
          },
        },
        lg: {
          css: {
            h2: {
              fontSize: '3rem',
              fontWeight: 800,
              lineHeight: 1,
            },
          },
        },
      },
    },
    gutenberg: (theme) => ({
      // Create block color palette utility classes that WordPress uses.
      // @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#block-color-palettes
      colors: {
        purple: theme('colors.violet.DEFAULT'),
        'light-purple': theme('colors.violet.100'),
        orange: theme('colors.orange.DEFAULT'),
        'light-orange': theme('colors.orange.400'),
      },

      // If set, will pick the color with most contrast as the foreground text
      // color for block background color components.
      foregroundColors: [theme('colors.black'), theme('colors.white')],

      // Create block font size utility classes that WordPress uses.
      // https://developer.wordpress.org/block-editor/developers/themes/theme-support/#block-font-sizes
      fontSizes: {
        xs: theme('fontSize.xs'),
        sm: theme('fontSize.sm'),
        base: theme('fontSize.base'),
        xl: theme('fontSize.xl'),
        xxl: theme('fontSize.2xl'),
      },

      alignments: {
        // Scrollbar width which defaults to macOS 0px but requires overflow-x
        // hidden on <html>. If that's a dealbreaker set it to 15px and some
        // users might have a small gutter.
        scrollbarWidth: '15px',

        // Content areas default width without alignments required when using
        // `sizer` property.
        contentWidth: '672px',

        // A max width cap for alignfull and alignwide
        maxWidth: '1080px',

        // Enable with a truthy value
        alignfull: true,

        // Core Group blocks default to 30px side padding.
        backgroundGutter: '30px',

        // Or override the above configurations per alignment type.
        alignwide: {
          // Add a minimum gutter on the left and right of the alignment
          gutter: theme('spacing.1'),

          // Add a sizing factor to fluidly grow the alignment.
          // Use values between 1.0 and 1.99 where lower means tighter to
          // viewport edge and larger means further.
          // NOTE the values of maxWidth, contentWidth and gutter all have
          // to use the same units for this to work. calc() in media queries
          // does not have good browser support
          sizer: 1.25,
        },

        // Add responsive alignleft and alignright support.
        alignleftright: {
          // Screen size when alignment is triggered, defaults to an arbitrary
          // 640px
          minWidth: theme('screens.sm'),

          // Side margin, defaults to core's 1em.
          margin: theme('spacing.2'),
        },
      },
    }),
  },
  variants: {
    extend: {
      display: ['group-hover'],
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
    // require('tailwindcss-wordpress'), // supposed to add support for alignright etc... doesn't seem to work

    gutenberg.colors,
    gutenberg.fontSizes,
    gutenberg.foregroundColors,
    gutenberg.alignments,
    gutenberg.admin,
  ],
};
