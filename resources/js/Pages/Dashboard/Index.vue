<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
        
                    <div>
                        <p>Meu nome é {{nome}} e meu sobrenome é {{sobrenome}}</p>
                        <p>{{response}}</p>
                    </div>

                </div>
            </div>
        </div>
    </div>    
</template>

<script>
export default {
    props: ['nome', 'sobrenome', 'response']
}
</script>