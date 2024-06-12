import Authenticated from '@/Layouts/AuthenticatedLayout'
import { Head, useForm } from '@inertiajs/react'
import React from 'react'

export default function Add({ auth }) {
    const { data, setData, post } = useForm({
        name: '',
        buyingPrice: '',
        sellingPrice: '',
    })

    function submit(e) {
        e.preventDefault()
        post(route('products.create'))
    }
    return (
        <Authenticated user={auth.user} header={<h2>Add New Product</h2>}>
            <Head title='Add Products' />
            <form onSubmit={submit}>
                <label htmlFor="name">name</label>
                <input
                    className='form-control'
                    type="text"
                    value={data.name}
                    onChange={e => setData('name', e.target.value)}
                />
                <label htmlFor="buyingPrice">buyingPrice</label>
                <input
                    className='form-control'
                    type="number"
                    value={data.buyingPrice}
                    onChange={e => setData('buyingPrice', e.target.value)}
                />
                <label htmlFor="sellingPrice">sellingPrice</label>
                <input
                    className='form-control'
                    type="number"
                    value={data.sellingPrice}
                    onChange={e => setData('sellingPrice', e.target.value)}
                />
                <button className='btn btn-success' type="submit">Save</button>
            </form>
        </Authenticated>
    )
}
