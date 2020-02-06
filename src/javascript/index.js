const { registerBlockType } = wp.blocks;
const { InspectorControls } = wp.editor;

// Import the styles
import '../styles/style.scss';

const {
	PanelBody,
	SelectControl,
	ServerSideRender,
} = wp.components;

registerBlockType( 'clorith/my-block', {
	title: 'My Block',
	description: "Display my block.",
	category: '',
	icon: 'welcome-learn-more',
	supports: {
		customClassName: true,
		align: [ 'wide', 'full' ],
	},
	attributes: {
		align: {
			type: 'string',
			default: null,
		},
	},
	edit: ( props => {
		const { attributes: { align }, setAttributes } = props;

		return [
			<>
				<InspectorControls>
					<PanelBody
						title="Settings"
						class=""
					>
					</PanelBody>
				</InspectorControls>
				<div>Something here</div>
			</>
		];
	} ),
	save() {
		return (
			<div>Something here</div>
		);
	},
} );
