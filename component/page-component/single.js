axios.get('').then(function(res) {
  console.log(res);
})
const ReactHtmlParser = require('react-html-parser');

const Single = () => (
  <div>{  ReactHtmlParser(Content) }</div>
);

ReactDOM.render(<Single />, document.querySelector('#content'));