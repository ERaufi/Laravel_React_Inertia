import Authenticated from '@/Layouts/AuthenticatedLayout'
import { Head, Link } from '@inertiajs/react'
import React from 'react'

export default function Index({ auth, products }) {
    return (
        <Authenticated user={auth.user} header={<h2>Products</h2>}>
            <Head title="Products" />
            <table className='table'>
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Buying Price</th>
                        <th>Selling Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {products.map((product) => (
                        <tr key={product.id}>
                            <td><img src={'storage/' + product.image} style={{ width: '180px' }} title='hi' /></td>
                            <td>{product.name}</td>
                            <td>{product.buyingPrice}</td>
                            <td>{product.sellingPrice}</td>
                            <td>
                                <Link href={'products/edit/' + product.id} className='btn btn-success'>Edit</Link>
                                <button onClick={() => handleDelete(product.id)} className='btn btn-danger'>Delete</button>
                                <Link href={'products/show/' + product.id} className='btn btn-info'>Show</Link>
                            </td>
                        </tr>
                    ))}
                </tbody>
            </table>
        </Authenticated>
    )
}
