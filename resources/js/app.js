import './bootstrap';
// the code below is so that images are found in the production build 'npm run build' else error will be received saying the image directory was not found.
// we do this when we need image versioning and cache busting whereby we place images in the resources folder rather than public folder.
import.meta.glob([
    '../images/**'
])
