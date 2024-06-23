import Pagination from '@/Components/Pagination';
import Authenticated from '@/Layouts/AuthenticatedLayout'
import { Head, Link, useForm } from '@inertiajs/react'
import React, { useEffect } from 'react'

export default function Index({ auth, products }) {
    const { data, setData, get } = useForm({
        name: '',
        buyingPrice: '',
        sellingPrice: '',
        page: products.current_page
    });

    const handleFilterChange = (e) => setData(e.target.name, e.target.value);

    useEffect(() => {
        const timeoutId = setTimeout(() => {
            get('products', {
                preserveState: true,
                name: data.name,
                buyingPrice: data.buyingPrice,
                sellingPrice: data.sellingPrice,
                page: data.page,
            });
        }, 300);

        return () => clearTimeout(timeoutId);
    }, [data]);

    return (
        <Authenticated user={auth.user} header={<h2>Products</h2>}>
            <Head title="Products" />
            <table className='table'>
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>
                            <label>Name</label>
                            <input
                                type="text"
                                name="name"
                                value={data.name}
                                onChange={handleFilterChange}
                                placeholder="Filter by Name"
                                className="form-control"
                            />
                        </th>
                        <th>
                            <label>Buying Price</label>
                            <input
                                type="text"
                                name="buyingPrice"
                                value={data.buyingPrice}
                                onChange={handleFilterChange}
                                placeholder="Filter by Buying Price"
                                className="form-control"
                            />
                        </th>
                        <th>
                            <label>Selling Price</label>
                            <input
                                type="text"
                                name="sellingPrice"
                                value={data.sellingPrice}
                                onChange={handleFilterChange}
                                placeholder="Filter by Selling Price"
                                className="form-control"
                            />
                        </th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {products.data.map((product) => (
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
            <Pagination
                links={products.links}
                currentPage={products.currentPage}
                setCurrentPage={(page) => setData('page', page)}
            />
        </Authenticated>
    )
}
