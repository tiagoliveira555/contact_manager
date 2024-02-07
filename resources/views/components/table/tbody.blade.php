@props(['id', 'name', 'contact', 'email'])

<tbody>
    <tr class="odd:bg-white even:bg-gray-100 dark:odd:bg-slate-900 dark:even:bg-slate-800">
        <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-gray-800 dark:text-gray-200">{{ $name }}
        </td>
        <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200">{{ $contact }}</td>
        <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200">{{ $email }}</td>
        <td class="whitespace-nowrap px-6 py-4 text-end text-sm font-medium">
            <a href="{{ route('contacts.show', ['contact' => $id]) }}"
                class="mr-3 inline-flex cursor-pointer items-center gap-x-2 rounded-lg border border-transparent text-sm font-semibold text-blue-600 hover:text-blue-800 disabled:pointer-events-none disabled:opacity-50 dark:text-blue-500 dark:hover:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">Show</a>
            
            <a href="{{ route('contacts.edit', ['contact' => $id]) }}"
                class="mr-3 inline-flex cursor-pointer items-center gap-x-2 rounded-lg border border-transparent text-sm font-semibold text-blue-600 hover:text-blue-800 disabled:pointer-events-none disabled:opacity-50 dark:text-blue-500 dark:hover:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">Edit</a>
            <a href="{{ route('contacts.delete', ['contact' => $id]) }}"
                class="inline-flex cursor-pointer items-center gap-x-2 rounded-lg border border-transparent text-sm font-semibold text-blue-600 hover:text-blue-800 disabled:pointer-events-none disabled:opacity-50 dark:text-blue-500 dark:hover:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">Delete</a>
        </td>
    </tr>
</tbody>
