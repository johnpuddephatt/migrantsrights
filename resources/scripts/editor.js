import '@wordpress/edit-post';
// import domReady from '@wordpress/dom-ready';
// import { unregisterBlockStyle, registerBlockStyle } from '@wordpress/blocks';

wp.domReady(function () {
  // wp.data
  //   .dispatch('core/edit-post')
  //   .removeEditorPanel('taxonomy-panel-category');
  wp.data
    .dispatch('core/edit-post')
    .removeEditorPanel('taxonomy-panel-post_tag');

  wp.blocks.unregisterBlockStyle('core/button', 'outline');

  wp.blocks.registerBlockStyle('core/button', {
    name: 'outline',
    label: 'Outline',
  });
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
  // wp.blocks.unregisterBlockType('core/latest-comments');
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

  // wp.blocks.registerBlockType('mrn/details-summary-block', {
  //   title: 'Details Summary Block',
  //   icon: 'arrow-right',
  //   keywords: ['summary', 'details', 'expanded'],
  //   category: 'common',
  //   attributes: {
  //     roleContent: {
  //       type: 'string',
  //       source: 'html',
  //       selector: 'h3',
  //       default: 'Add some description that will expand',
  //     },
  //     nameContent: {
  //       type: 'string',
  //       source: 'html',
  //       selector: 'h2',
  //       default: 'Name',
  //     },
  //   },

  //   edit: (props) => {
  //     const {
  //       attributes: { nameContent, roleContent },
  //       setAttributes,
  //       className,
  //     } = props;

  //     return (
  //       <details open className={className}>
  //         <summary>
  //           <wp.blockEditor.RichText
  //             tagName="h3"
  //             value={nameContent}
  //             onChange={(newContent) => {
  //               setAttributes({ nameContent: newContent });
  //             }}
  //           />
  //           <wp.blockEditor.RichText
  //             tagName="h4"
  //             value={roleContent}
  //             onChange={(newContent) => {
  //               setAttributes({ roleContent: newContent });
  //             }}
  //           />
  //         </summary>
  //         <div>
  //           <wp.blockEditor.InnerBlocks />
  //         </div>
  //       </details>
  //     );
  //   },

  //   save: (props) => {
  //     const {
  //       attributes: { nameContent, roleContent },
  //     } = props;

  //     return (
  //       <wp.element.Fragment>
  //         <details>
  //           <summary>
  //             <wp.blockEditor.RichText.Content
  //               tagName="h3"
  //               value={nameContent}
  //             />
  //             <wp.blockEditor.RichText.Content
  //               tagName="h4"
  //               value={roleContent}
  //             />
  //           </summary>
  //           <div>
  //             <wp.blockEditor.InnerBlocks.Content />
  //           </div>
  //         </details>
  //       </wp.element.Fragment>
  //     );
  //   },
  // });

  wp.blocks.registerBlockType('mrn/button', {
    title: 'Read more button',
    edit: () => {
      return (
        <button className="button" aria-expanded="false" aria-label="Read more">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            className="inline-block w-16 h-16 ml-auto align-text-bottom stroke-2 md:w-28 md:h-28 text-violet-200"
            viewBox="0 0 1738 1551"
          >
            <path
              d="M1155.465 778.26H503.79M763.84 503.792l469.958 271.333L763.84 1046.45"
              fill="none"
              stroke="currentColor"
              strokeWidth="100"
            ></path>
          </svg>
        </button>
      );
    },
    save: () => {
      return (
        <button className="button" aria-expanded="false" aria-label="Read more">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            className="inline-block w-16 h-16 ml-auto align-text-bottom stroke-2 md:w-28 md:h-28 text-violet-200"
            viewBox="0 0 1738 1551"
          >
            <path
              d="M1155.465 778.26H503.79M763.84 503.792l469.958 271.333L763.84 1046.45"
              fill="none"
              stroke="currentColor"
              strokeWidth="100"
            ></path>
          </svg>
        </button>
      );
    },
  });

  wp.blocks.registerBlockType('mrn/person', {
    title: 'Person',
    category: 'widgets',
    edit: () => {
      return wp.element.createElement(wp.blockEditor.InnerBlocks, {
        template: [
          [
            'core/group',
            {
              className: 'wp-block-person',
              templateLock: true,
            },
            [
              [
                'core/columns',
                {
                  templateLock: true,
                },
                [
                  [
                    'core/column',
                    {
                      width: '20%',
                      templateLock: true,
                    },
                    [
                      [
                        'core/image',
                        {
                          sizeSlug: 'thumbnail',
                          height: 150,
                          width: 150,
                        },
                      ],
                    ],
                  ],
                  [
                    'core/column',
                    {
                      width: '80%',
                      templateLock: 'all',
                    },
                    [
                      [
                        'core/heading',
                        {
                          placeholder: 'Name',
                          level: 3,
                        },
                      ],
                      [
                        'core/heading',
                        {
                          placeholder: 'Position/title',
                          level: 4,
                        },
                      ],
                      [
                        'mrn/button',
                        {
                          label: 'View details',
                        },
                      ],
                    ],
                  ],
                ],
              ],
              [
                'core/group',
                {
                  className: 'person-details',
                  templateLock: false,
                  hidden: true,
                },
                [
                  [
                    'core/paragraph',
                    {
                      placeholder: 'About this person',
                    },
                  ],
                ],
              ],
            ],
          ],
        ],
        templateLock: true,
      });
    },
    save: () => {
      return wp.element.createElement(wp.blockEditor.InnerBlocks.Content, {});
    },
  });
});
