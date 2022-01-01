<?php
/**
 * Template Name: Full Width Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
?>
ádsfdghhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh
<div id='root'></div>

<script type='text/babel'>
	alert("dmm");
	const Link = ReactRouterDOM.Link;
	const Route = ReactRouterDOM.Route;

	const App = () => (
		<ReactRouterDOM.HashRouter>
			<ul>
				<li><Link to="/">Home</Link></li>
				<li><Link to="/login">Login</Link></li>
				<li><Link to="/register">Register</Link></li>
			</ul>

			<Route path="/" exact component={Home} />
			<Route path="/login" component={Login} />
			<Route path="/register" component={Register} />
		</ReactRouterDOM.HashRouter>
	)

	const Home = () => <h1>Home</h1>
	const Login = () => <h1>Login</h1>
	const Register = () => <h1>Register</h1>

	ReactDOM.render(<App />, document.querySelector('#root'));
</script>

<?php get_footer(); ?>
