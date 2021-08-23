import React from 'react';
import ReactDOM from 'react-dom';
import Datatable from 'react-data-table-component'
function Index() {
    console.log('Mounted Index')

    // const myTable = () => (

    // )

    return (
        <div>
            <div className="card">
                <div className="card-body">
                    <Datatable
                        title="Sample Table"
                    />
                </div>
            </div>
            <div className="title m-b-md">
                SANBOX
            </div>

            <div className="links">
                <a href="https://laravel.com/docs">Docs</a>
            </div>
        </div>
        // <div className="container">
        //     <div className="row justify-content-center">
        //         <div className="col-md-8">
        //             <div className="card">
        //                 <div className="card-header">Example Component</div>

        //                 <div className="card-body">I'm an example component!</div>
        //             </div>
        //         </div>
        //     </div>
        // </div>
    );
}

export default Index;

if (document.getElementById('indexsample')) {
    ReactDOM.render(<Index />, document.getElementById('indexsample'));
}
