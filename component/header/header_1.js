"use strict";

class SubComponent extends React.Component {

  constructor(props) {
    super(props);
  }
  
  render() {

    const Content = () => {
      const BrowserRouter = ReactRouterDOM.BrowserRouter;
      const Link = ReactRouterDOM.Link;
      const Route = ReactRouterDOM.Route;
      const Routes = ReactRouterDOM.Routes;
  
      const Home = () => <h1>Home</h1>
      const Login = () => <h1>Login</h1>
      const Register = () => <h1>Register</h1>
  
      return (
        <BrowserRouter>
          <ul>
            <li><Link to="/southteam/">Home</Link></li>
            <li><Link to="/southteam/login">Login</Link></li>
            <li><Link to="/southteam/register">Register</Link></li>
          </ul>
          <Routes>
              <Route path="/southteam/" exact element={<Home />} />
              <Route path="/southteam/login" element={<Login />} />
              <Route path="/southteam/register" element={<Register />} />
          </Routes>
        </BrowserRouter>
      );
    }

    return (
        <Content />
      )              
  }
}


customElements.define('sub-component', SubComponent);