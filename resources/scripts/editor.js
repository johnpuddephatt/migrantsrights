import '@wordpress/edit-post';
import domReady from '@wordpress/dom-ready';
import { unregisterBlockStyle, registerBlockStyle } from '@wordpress/blocks';

domReady(() => {
  unregisterBlockStyle('core/button', 'outline');

  registerBlockStyle('core/button', {
    name: 'outline',
    label: 'Outline',
  });

  wp.domReady(function () {
    // wp.data
    //   .dispatch('core/edit-post')
    //   .removeEditorPanel('taxonomy-panel-category');
    wp.data
      .dispatch('core/edit-post')
      .removeEditorPanel('taxonomy-panel-post_tag');
    wp.data.dispatch('core/edit-post').removeEditorPanel('discussion-panel');

    wp.blocks.unregisterBlockType('core/verse');
    wp.blocks.unregisterBlockType('core/cover');
    wp.blocks.unregisterBlockType('core/more');
    wp.blocks.unregisterBlockType('core/code');
    wp.blocks.unregisterBlockType('core/nextpage');
    wp.blocks.unregisterBlockType('core/preformatted');
    wp.blocks.unregisterBlockType('core/html');
    wp.blocks.unregisterBlockType('core/embed');
    wp.blocks.unregisterBlockType('core/archives');
    wp.blocks.unregisterBlockType('core/categories');
    wp.blocks.unregisterBlockType('core/calendar');
    wp.blocks.unregisterBlockType('core/tag-cloud');
    wp.blocks.unregisterBlockType('core/rss');
    wp.blocks.unregisterBlockType('core/search');
    wp.blocks.unregisterBlockType('core/shortcode');
    wp.blocks.unregisterBlockType('core/latest-posts');
    wp.blocks.unregisterBlockType('core/latest-comments');
    wp.blocks.unregisterBlockType('core/spacer');

    wp.blocks.unregisterBlockStyle('core/quote', 'default');
    wp.blocks.unregisterBlockStyle('core/image', 'circle-mask');
    wp.blocks.unregisterBlockStyle('core/image', 'rounded');
    wp.blocks.unregisterBlockStyle('core/pullquote', 'solid-color');

    wp.blocks.registerBlockStyle('core/paragraph', {
      name: 'large',
      label: 'Large',
    });

    wp.blocks.registerBlockStyle('core/image', {
      name: 'cut-corner-bottom-left',
      label: 'Cut corner (bottom left)',
    });
  });
});