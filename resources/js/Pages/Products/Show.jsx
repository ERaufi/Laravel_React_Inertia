import Authenticated from '@/Layouts/AuthenticatedLayout'
import { Head } from '@inertiajs/react'
import React from 'react'

export default function Show({ auth, product }) {
    return (
        <Authenticated user={auth.user} header={<h2>View Product</h2>}>
            <Head title='Show Product' />
            <h1>Name:{product.name}</h1>
            <h1>Buying Price:{product.buyingPrice}</h1>
            <h1>Selling Price:{product.sellingPrice}</h1>
            <img src={'../../storage/' + product.image} style={{ width: '240px' }} />
        </Authenticated>
    )
}
