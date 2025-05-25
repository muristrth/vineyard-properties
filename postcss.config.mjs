// postcss.config.mjs

// Import Tailwind CSS and Autoprefixer directly
import tailwindcss from 'tailwindcss';
import autoprefixer from 'autoprefixer';

export default {
  plugins: {
    [tailwindcss]: {}, // Pass the imported plugin module
    [autoprefixer]: {}, // Pass the imported plugin module
  },
};