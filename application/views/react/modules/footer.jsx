class Footer extends React.Component {
	constructor(props) {
		super(props);
	}
	render() {
		return (
			<div>
				<p className="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
			</div>
		);
	}
}