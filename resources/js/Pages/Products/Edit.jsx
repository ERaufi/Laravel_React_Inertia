import Authenticated from '@/Layouts/AuthenticatedLayout'
import { Head, useForm } from '@inertiajs/react'
import React from 'react'

export default function Edit({ auth, product }) {

    const { data, setData, post, errors } = useForm({
        name: product.name,
        buyingPrice: product.buyingPrice,
        sellingPrice: product.sellingPrice,
        id: product.id,
        image: null,
    })

    function submit(e) {
        e.preventDefault()
        post(route('product.update'))
    }


    return (
        <Authenticated user={auth.user} header={<h2>Edit Product</h2>}>
            <Head title='Edit Product' />
            <form onSubmit={submit}>
                <label htmlFor="name">name</label>
                <input
                    className='form-control'
                    type="text"
                    value={data.name}
                    onChange={e => setData('name', e.target.value)}
                />
                {errors.name && <div className="text-danger">{errors.name}</div>}

                <label htmlFor="buyingPrice">buyingPrice</label>
                <input
                    className='form-control'
                    type="number"
                    value={data.buyingPrice}
                    onChange={e => setData('buyingPrice', e.target.value)}
                />
                {errors.buyingPrice && <div className="text-danger">{errors.buyingPrice}</div>}

                <label htmlFor="sellingPrice">sellingPrice</label>
                <input
                    className='form-control'
                    type="number"
                    value={data.sellingPrice}
                    onChange={e => setData('sellingPrice', e.target.value)}
                />
                {errors.sellingPrice && <div className="text-danger">{errors.sellingPrice}</div>}


                <div className="col-md-3">
                    <img src={'../../storage/' + product.image} style={{ width: '240px' }} />
                </div>

                <input type="file" onChange={e => setData('image', e.target.files[0])} />
                {errors.image && <div className="text-danger">{errors.image}</div>}

                <button className='btn btn-success' type="submit">Save</button>
            </form>
        </Authenticated>
    )
}
