<?php namespace PlanetaDelEste\PaginationWithHavings;

trait PaginationWithHavings
{
    /**
     * @return BuilderWithPaginationHavingSupport
     */
    protected function newBaseQueryBuilder()
    {
        $conn = $this->getConnection();
        $grammar = $conn->getQueryGrammar();
        $builder = new BuilderWithPaginationHavingSupport($conn, $grammar, $conn->getPostProcessor());

        if ($this->duplicateCache) {
            $builder->enableDuplicateCache();
        }

        return $builder;
    }
}
