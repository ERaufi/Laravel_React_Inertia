import React from 'react';
import { router } from '@inertiajs/react';

const Pagination = ({ links, currentPage, setCurrentPage }) => {
    const handlePageChange = (url) => {
        const pageParam = new URL(url).searchParams.get('page');
        setCurrentPage(pageParam);
        router.get(url, { preserveState: true });
    };

    return (
        <nav aria-label="Page navigation example">
            <ul className="pagination">
                {links.map(link => (
                    <li className={link.active ? 'page-item active' : 'page-item'} key={link.label}>
                        <a
                            className="page-link"
                            href={link.url}
                            onClick={(e) => {
                                e.preventDefault();
                                handlePageChange(link.url);
                            }}
                            dangerouslySetInnerHTML={{ __html: link.label }}
                        />
                    </li>
                ))}
            </ul>
        </nav>
    );
};

export default Pagination;
